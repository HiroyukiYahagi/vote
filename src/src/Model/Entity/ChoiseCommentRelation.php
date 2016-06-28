<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ChoiseCommentRelation Entity
 *
 * @property int $id
 * @property \Cake\I18n\Time $deleted
 * @property int $choise_id
 * @property int $comment_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Choise $choise
 * @property \App\Model\Entity\Comment $comment
 */
class ChoiseCommentRelation extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
