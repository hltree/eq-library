<?php

namespace Concrete\TestHelpers\Localization\Translator\Translation\Fixtures;

use Concrete\Core\Localization\Translator\Translation\TranslationLoaderInterface;
use Concrete\Core\Localization\Translator\TranslatorAdapterInterface;

/**
 * Dummy translation loader for the tests.
 *
 * @author Antti Hukkanen <antti.hukkanen@mainiotech.fi>
 */
class DummyTranslationLoader implements TranslationLoaderInterface
{
    /**
     * {@inheritdoc}
     */
    public function loadTranslations(TranslatorAdapterInterface $translatorAdapter)
    {
    }
}
