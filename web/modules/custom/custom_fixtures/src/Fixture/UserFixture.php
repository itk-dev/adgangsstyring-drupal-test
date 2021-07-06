<?php

namespace Drupal\custom_fixtures\Fixture;

use Drupal\content_fixtures\Fixture\AbstractFixture;
use Drupal\user\Entity\User;

class UserFixture extends AbstractFixture {
  public function load()
  {
    $emails = ['user@aarhus.dk', 'test@aarhus.dk'];

    foreach ($emails as $email) {
      User::create([
        'name' => $email,
        'mail' => $email,
      ])
        ->activate()
        ->save();
    }
  }
}
