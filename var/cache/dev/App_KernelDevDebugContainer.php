<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLnxqqxt\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLnxqqxt/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLnxqqxt.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLnxqqxt\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLnxqqxt\App_KernelDevDebugContainer([
    'container.build_hash' => 'Lnxqqxt',
    'container.build_id' => 'dba0604f',
    'container.build_time' => 1717158604,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLnxqqxt');