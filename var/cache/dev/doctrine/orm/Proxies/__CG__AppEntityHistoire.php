<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Histoire extends \App\Entity\Histoire implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'auteur' => [parent::class, 'auteur', null],
        "\0".parent::class."\0".'droitsHistoire' => [parent::class, 'droitsHistoire', null],
        "\0".parent::class."\0".'droitsImages' => [parent::class, 'droitsImages', null],
        "\0".parent::class."\0".'editeur' => [parent::class, 'editeur', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'illustrateur' => [parent::class, 'illustrateur', null],
        "\0".parent::class."\0".'illustration' => [parent::class, 'illustration', null],
        "\0".parent::class."\0".'pages' => [parent::class, 'pages', null],
        "\0".parent::class."\0".'titre' => [parent::class, 'titre', null],
        "\0".parent::class."\0".'traducteur' => [parent::class, 'traducteur', null],
        'auteur' => [parent::class, 'auteur', null],
        'droitsHistoire' => [parent::class, 'droitsHistoire', null],
        'droitsImages' => [parent::class, 'droitsImages', null],
        'editeur' => [parent::class, 'editeur', null],
        'id' => [parent::class, 'id', null],
        'illustrateur' => [parent::class, 'illustrateur', null],
        'illustration' => [parent::class, 'illustration', null],
        'pages' => [parent::class, 'pages', null],
        'titre' => [parent::class, 'titre', null],
        'traducteur' => [parent::class, 'traducteur', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}