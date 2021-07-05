<?php

namespace Drupal\custom_fixtures\Fixture;

use Drupal\content_fixtures\Fixture\AbstractFixture;
use Drupal\user\Entity\User;

class UserFixture extends AbstractFixture {
  public function load()
  {
    User::create([
      'name' => 'user-87',
      'mail' => 'user-87@example.com',
    ])
      ->activate()
      ->save();
  }
}
