import preset from './vendor/filament/support/tailwind.config.preset'
import wireUiPreset from './vendor/wireui/wireui/tailwind.config.js'

export default {
    presets: [wireUiPreset, preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './vendor/wireui/wireui/resources/**/*.blade.php',
        './vendor/wireui/wireui/ts/**/*.ts',
        './vendor/wireui/wireui/src/View/**/*.php'
    ],
}
