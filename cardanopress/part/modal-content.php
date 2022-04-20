<?php

/**
 * The template for displaying the contents of the connect-modal popup.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/part/modal-content.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

?>

<div class="px-6 py-4">
    <template x-for="(type, index) in supportedWallets" :key="index">
        <button x-on:click.prevent="walletConnect(type)" x-bind:disabled="isDisabled(type)">
            <span x-text="type"></span>

            <template x-if="!walletAvailable(type)">
                <span class="block italic text-sm">(Not available)</span>
            </template>
        </button>
    </template>
</div>
