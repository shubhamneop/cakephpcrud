<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Demo Entity
 *
 * @property int $id
 * @property string $name
 * @property int $mobile
 * @property string $email
 * @property string $password
 * @property bool $gender
 * @property \Cake\I18n\FrozenDate $date
 */
class Demo extends Entity
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
        'name' => true,
        'mobile' => true,
        'email' => true,
        'password' => true,
        'date' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
