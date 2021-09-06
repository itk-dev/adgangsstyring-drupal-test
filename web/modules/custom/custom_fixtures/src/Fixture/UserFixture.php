<?php

namespace Drupal\custom_fixtures\Fixture;

use Drupal\content_fixtures\Fixture\AbstractFixture;
use Drupal\content_fixtures\Fixture\DependentFixtureInterface;
use Drupal\user\Entity\User;

class UserFixture extends AbstractFixture  implements DependentFixtureInterface {
  public function load()
  {
    for ($id = 2; $id < 100; $id++) {
      $name = sprintf('user%d', $id);
      $user = User::create([
        'uid' => $id,
        'name' => $name,
        'mail' => sprintf('%s@example.com', $name),
      ]);
      $user->activate();
      $user->addRole($this->getReference('role:role'.($id%3))->id());
      $user->save();
    }
  }

  public function getDependencies()
  {
    return [
      RoleFixture::class,
    ];
  }
}
