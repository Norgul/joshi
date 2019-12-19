<?php

namespace MailChamp\Http\Controllers\Admin;

use Illuminate\Http\Request;
use MailChamp\Http\Controllers\Controller;

class SubAccountController extends Controller
{

    /**
     * Searching.
     */
    public function search($request)
    {
        if (!$request->user()->admin->can('read', new \MailChamp\Model\SubAccount())) {
            return $this->notAuthorized();
        }

        // If admin can view all sending domains
        if (!$request->user()->admin->can("readAll", new \MailChamp\Model\SubAccount())) {
            $request->merge(array("admin_id" => $request->user()->admin->id));
        }

        return \MailChamp\Model\SubAccount::search($request);
            //->groupBy('sub_accounts.customer_id')
            //->groupBy('sub_accounts.sending_server_id');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $accounts = $this->search($request);

        return view('admin.sub_accounts.index', [
            'accounts' => $accounts,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listing(Request $request)
    {
        $accounts = $this->search($request)->paginate($request->per_page);

        return view('admin.sub_accounts._list', [
            'accounts' => $accounts,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $uid)
    {
        try {
            $account = \MailChamp\Model\SubAccount::findByUid($uid);

            // authorize
            if ($request->user()->admin->can('delete', $account)) {
                $account = \MailChamp\Model\SubAccountSendGrid::findByUid($uid);
                $account->delete();
            }

            // Redirect to my lists page
            echo trans('messages.sub_accounts.deleted');
        } catch (\Exception $e) {
            echo json_encode([
                'status' => 'error',
                'message' => $e->getMessage(),
            ]);
            return;
        }
    }

    /**
     * Delete confirm message.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteConfirm(Request $request, $uid)
    {
        // @todo hard-coded for SendGrid
        $account = \MailChamp\Model\SubAccountSendGrid::findByUid($uid);

        return view('admin.sub_accounts.delete_confirm', [
            'account' => $account,
        ]);
    }
}
