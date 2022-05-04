<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">
        
        <span class="app-brand-text demo menu-text fw-bolder ms-2">IFM Field</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      
      @include('components.company-sidebar')

      @include('components.hod-sidebar')
      @include('components.student-sidebar')
      @include('components.supervisor-sidebar')

    </ul>
</aside>