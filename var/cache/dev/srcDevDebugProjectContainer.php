<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEb54gO9\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEb54gO9/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerEb54gO9.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerEb54gO9\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerEb54gO9\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'Eb54gO9',
    'container.build_id' => '21f84958',
    'container.build_time' => 1523371565,
));
