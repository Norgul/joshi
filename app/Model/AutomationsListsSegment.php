<?php

namespace MailChamp\Model;

use Illuminate\Database\Eloquent\Model;

class AutomationsListsSegment extends Model
{
    /**
     * Associations.
     *
     * @var object | collect
     */
    public function automation()
    {
        return $this->belongsTo('MailChamp\Model\Automation');
    }

    public function mailList()
    {
        return $this->belongsTo('MailChamp\Model\MailList');
    }

    public function segment()
    {
        return $this->belongsTo('MailChamp\Model\Segment');
    }

    /**
     * Get segment in the same campaign and mail list.
     *
     * @return collect
     */
    public function getRelatedSegments()
    {
        $segments = Segment::leftJoin('automations_lists_segments', 'automations_lists_segments.segment_id', '=', 'segments.id')
                        ->where('automations_lists_segments.automation_id', '=', $this->automation_id)
                        ->where('automations_lists_segments.mail_list_id', '=', $this->mail_list_id);

        return $segments->get();
    }
}
