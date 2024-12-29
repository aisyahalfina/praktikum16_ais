<div class="container mt-4">
    <h4 style="font-weight: bolder">{{ $pageTitle }}</h4>
    <hr>
    <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
        <!-- Kondisional untuk menentukan ikon berdasarkan $pageTitle -->
        <div
            class="@if ($pageTitle === 'Home') bi-house-fill
                    @elseif($pageTitle === 'Profile') bi-person-circle
                    @else bi-file-earmark @endif me-3 fs-1">
        </div>
        <h4 class="mb-0">Well done! this is {{ $pageTitle }}.</h4>
    </div>
</div>
