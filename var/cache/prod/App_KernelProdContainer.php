<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQmdtOw7\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQmdtOw7/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerQmdtOw7.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerQmdtOw7\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerQmdtOw7\App_KernelProdContainer([
    'container.build_hash' => 'QmdtOw7',
    'container.build_id' => '18fc4031',
    'container.build_time' => 1717071990,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQmdtOw7');
