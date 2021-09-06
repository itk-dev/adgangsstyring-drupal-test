<?php

namespace Drupal\custom_fixtures\Fixture;

use Drupal\content_fixtures\Fixture\AbstractFixture;
use Drupal\user\Entity\Role;
use Drupal\user\Entity\User;

class RoleFixture extends AbstractFixture {
  public function load()
  {
    // Delete all roles.
    $roles = Role::loadMultiple();
    foreach ($roles as $role) {
      $role->delete();
    }

    for ($i = 0; $i < 4; $i++) {
      $role = Role::create([
        'id' => sprintf('role%d', $i),
        'label' => sprintf('Role %d', $i),
      ]);
      $this->addReference('role:' . $role->id(), $role);
      $role->save();
    }
  }
}
