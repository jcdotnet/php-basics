<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class NotificationServiceTest extends TestCase
{
    public function testNotificationIsSent(): void
    {
        $mailer = $this->createStub(Mailer::class);

        $mailer->method('sendEmail')
               ->willReturn(true);

        $service = new NotificationService($mailer);

        $this->assertTrue($service->sendNotification('test@example.com', 'Hello'));
    }

    public function testSendThrowsException(): void
    {
        $mailer = $this->createStub(Mailer::class);

        $mailer->method('sendEmail')
               ->willThrowException(new RuntimeException('SMTP server down'));

        $service = new NotificationService($mailer);

        $this->expectException(NotificationException::class);
        $this->expectExceptionMessage('Could not send notification');

        $service->sendNotification('test@example.com', 'Hello');
    }

    public function testMailerIsCalledCorrectly(): void
    {
        $mailer = $this->createMock(Mailer::class);

        // configuring the mock object (in case we need more control)
        /*
        $mailer = $this->getMockBuilder(Mailer::class)
                ->onlyMethods(['sendEmail'])
                ->getMock();
        */

        $mailer->expects($this->once())
                ->method('sendEmail')
                ->with('test@example.com', 'New Notification', 'Hi')
                ->willReturn(true);

        $service = new NotificationService($mailer);

        $this->assertTrue($service->sendNotification('test@example.com', 'Hi'));
    }
}