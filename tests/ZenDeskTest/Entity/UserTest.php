<?php

namespace ZenDeskTest\Entity;

use ZenDeskTest\AbstractTestCase;
use ZenDesk\Entity\User;
use ZenDeskTestAssets\CacheHttpClient;

class UserTest extends AbstractTestCase
{
    /** @var \ZenDesk\Entity\User */
    protected static $user;

    public function testCanSerialize()
    {
        $user = new User();

        $user->setId(1);

        $this->assertNotNull($user->getId());

        $user = unserialize(serialize($user));

        $this->assertNotNull($user->getId());
    }

    public function testCanCreateAUser()
    {
        $user = new User();
        /** @var \ZenDesk\Service\UserService $service */
        $service = $this->getSM()->get('ZenDesk\Service\UserService');

        $this->assertEquals($user->getId(), null);

        $id = CacheHttpClient::getUniqId();

        $user->setName($name = 'Vince' . $id);
        $user->setEmail('blanchon.vincent+zd-tests'.$id.'@4mation.com.au');
        $service->persist($user);

        $this->assertNotNull($user->getId());
        $this->assertNotNull($user->getRemoteService());
        $this->assertEquals($user->getName(), $name);

        self::$user = $user;
    }

    public function testCannotCreateUserWithExistingEmail()
    {
        if (!self::$user) {
            $this->markTestSkipped('User entity must be defined');
        }

        $existingUser = self::$user;

        /** @var \ZenDesk\Service\UserService $service */
        $service = $this->getSM()->get('ZenDesk\Service\UserService');

        $this->setExpectedException('ZenDesk\Exception\RecordInvalid\ExistingUserEmailException');
        $service->persist($existingUser);
    }

    public function testCanUpdateAUser()
    {
        if (!self::$user) {
            $this->markTestSkipped('User entity must be defined');
        }

        $user = self::$user;
        $id = CacheHttpClient::getUniqId() . 'new';

        $updatedAt = $user->getUpdatedAt();

        $user->setName($name = 'Vincent' . $id);
        $user->save();

        $this->assertNotEquals($updatedAt, $user->getUpdatedAt());
    }

    public function testCanSuspendAUser()
    {
        if (!self::$user) {
            $this->markTestSkipped('User entity must be defined');
        }

        $user = self::$user;

        $suspended = $user->getSuspended();
        $user->suspend();

        $this->assertNotEquals($suspended, $user->getSuspended());
    }

    public function testCanDeleteAUser()
    {
        if (!self::$user) {
            $this->markTestSkipped('User entity must be defined');
        }

        $user = self::$user;
        $updatedAt = $user->getUpdatedAt();

        $user->delete();

        $this->assertNotEquals($updatedAt, $user->getUpdatedAt());
    }

    public function testCanUpdateEmail()
    {
        $this->markTestSkipped('Waiting for zendesk about primary email');

        $user = new User();
        /** @var \ZenDesk\Service\UserService $service */
        $service = $this->getSM()->get('ZenDesk\Service\UserService');

        $this->assertEquals($user->getId(), null);

        $id = CacheHttpClient::getUniqId();

        $user->setName('UpdateEmail' . $id);
        $user->setEmail($email = 'blanchon.vincent+update-email'.$id.'@4mation.com.au');
        $service->persist($user);

        $this->assertNotNull($user->getId());
        $this->assertNotNull($user->getRemoteService());
        $this->assertEquals($user->getEmail(), $email);

        $user->setEmail($email = 'blanchon.vincent+new-update-email'.$id.'@4mation.com.au');
        $user->save();

        $user = $service->get($user->getId());
        $this->assertEquals($email, $user->getEmail());
    }
}
