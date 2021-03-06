<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Choise Entity
 *
 * @property int $id
 * @property string $created
 * @property string $modified
 * @property string $deleted
 * @property int $thread_id
 * @property string $title
 * @property string $description
 * @property string $image_url
 *
 * @property \App\Model\Entity\Thread $thread
 * @property \App\Model\Entity\ChoiseCommentRelation[] $choise_comment_relations
 */
class Choise extends Entity
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
