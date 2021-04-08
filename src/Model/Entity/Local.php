<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Local Entity
 *
 * @property int $id
 * @property string|null $rua
 * @property string|null $bairro
 * @property string|null $cidade
 * @property string|null $estado
 *
 * @property \App\Model\Entity\Angiosperma[] $angiospermas
 */
class Local extends Entity
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
        'rua' => true,
        'bairro' => true,
        'cidade' => true,
        'estado' => true,
        'angiospermas' => true,
    ];
}
