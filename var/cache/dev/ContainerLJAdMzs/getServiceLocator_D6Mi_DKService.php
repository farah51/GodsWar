<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.D6Mi.dK' shared service.

return $this->privates['service_locator.D6Mi.dK'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('mailer' => function () {
    return ($this->services['swiftmailer.mailer.default'] ?? $this->load(__DIR__.'/getSwiftmailer_Mailer_DefaultService.php'));
}, 'passwordEncoder' => function () {
    return ($this->services['security.password_encoder'] ?? $this->load(__DIR__.'/getSecurity_PasswordEncoderService.php'));
}));
