<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDQqmx3S\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDQqmx3S/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDQqmx3S.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDQqmx3S\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDQqmx3S\App_KernelDevDebugContainer([
    'container.build_hash' => 'DQqmx3S',
    'container.build_id' => '092416c4',
    'container.build_time' => 1577340080,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDQqmx3S');