<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Thread Entity
 *
 * @property int $id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \Cake\I18n\Time $deleted
 * @property int $content_id
 * @property string $title
 * @property string $description
 * @property string $image_url
 *
 * @property \App\Model\Entity\Content $content
 * @property \App\Model\Entity\Choise[] $choises
 */
class Thread extends Entity
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
