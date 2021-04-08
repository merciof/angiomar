<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Angiosperma Entity
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $imagem
 * @property int|null $local_id
 * @property int|null $species_id
 * @property int|null $user_id
 *
 * @property \App\Model\Entity\Local $local
 * @property \App\Model\Entity\Species $species
 * @property \App\Model\Entity\User $user
 */
class Angiosperma extends Entity
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
        'nome' => true,
        'imagem' => true,
        'local_id' => true,
        'species_id' => true,
        'user_id' => true,
        'local' => true,
        'species' => true,
        'user' => true,
    ];
}
