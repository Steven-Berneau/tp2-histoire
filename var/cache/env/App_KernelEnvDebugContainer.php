<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEMkOGK0\App_KernelEnvDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEMkOGK0/App_KernelEnvDebugContainer.php') {
    touch(__DIR__.'/ContainerEMkOGK0.legacy');

    return;
}

if (!\class_exists(App_KernelEnvDebugContainer::class, false)) {
    \class_alias(\ContainerEMkOGK0\App_KernelEnvDebugContainer::class, App_KernelEnvDebugContainer::class, false);
}

return new \ContainerEMkOGK0\App_KernelEnvDebugContainer([
    'container.build_hash' => 'EMkOGK0',
    'container.build_id' => '3f63ce98',
    'container.build_time' => 1717159018,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEMkOGK0');
