<div id="helpers-translate">
    <x-filament::dropdown placement="bottom-end">
        <x-slot name="trigger">
            <x-filament::icon-button icon="bites-lang" label="Languange Translator" />
        </x-slot>

        <x-filament::dropdown.list>
            @foreach (\Rimba\Translate\Enums\Language::cases() as $language)
                <x-filament::dropdown.list.item :icon="$language->getIcon()"
                    x-on:click="triggerGoogleTranslate('{{ $language->value }}') && close();">
                    {{ $language->getLabel() }}
                </x-filament::dropdown.list.item>
            @endforeach
            <div id="google_translate_element"></div>

        </x-filament::dropdown.list>
    </x-filament::dropdown>
</div>
