<?php declare(strict_types=1);

namespace Shopware\Api\Media\Collection;

use Shopware\Api\Language\Collection\LanguageBasicCollection;
use Shopware\Api\Media\Struct\MediaAlbumTranslationDetailStruct;

class MediaAlbumTranslationDetailCollection extends MediaAlbumTranslationBasicCollection
{
    /**
     * @var MediaAlbumTranslationDetailStruct[]
     */
    protected $elements = [];

    public function getMediaAlbum(): MediaAlbumBasicCollection
    {
        return new MediaAlbumBasicCollection(
            $this->fmap(function (MediaAlbumTranslationDetailStruct $mediaAlbumTranslation) {
                return $mediaAlbumTranslation->getMediaAlbum();
            })
        );
    }

    public function getLanguages(): LanguageBasicCollection
    {
        return new LanguageBasicCollection(
            $this->fmap(function (MediaAlbumTranslationDetailStruct $mediaAlbumTranslation) {
                return $mediaAlbumTranslation->getLanguage();
            })
        );
    }

    protected function getExpectedClass(): string
    {
        return MediaAlbumTranslationDetailStruct::class;
    }
}
