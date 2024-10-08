<?php

use App\Front\Docs\DocsController;
use function Tempest\uri;
?>

<x-component name="footer">

  <footer class="slope-3 md:pt-32 py-16 px-4 md:px-16 flex justify-center mt-8 bg-tempest-blue-600 text-white font-bold ">
    <div class="flex flex-col gap-8 place-items-center">
      <h2 class="text-2xl">
        Get started with <span class="tempest">Tempest</span> today, now in alpha!
      </h2>

      <nav class="flex flex-wrap gap-2 mt-6 md:mt-0">
        <x-button uri="<?= uri(DocsController::class, category: 'framework', slug: '01-getting-started') ?>">Read the docs</x-button>
        <x-button uri="https://github.com/tempestphp/tempest-framework">Tempest on GitHub</x-button>
      </nav>
    </div>
  </footer>
</x-component>