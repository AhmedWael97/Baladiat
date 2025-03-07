<!-- Nav Item - Alerts -->
<li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bell fa-fw"></i>
        <!-- Counter - Alerts -->
        <span
            class="badge badge-danger badge-counter">{{ Auth::user()->notifications()->where('read_at', null)->count() }}</span>
    </a>
    <!-- Dropdown - Alerts -->
    <div style="right: -35px;"
        class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
        aria-labelledby="alertsDropdown">
        <h6 class="dropdown-header">
            الاشعارات
        </h6>
        <div class="">
            @forelse(Auth::user()->notifications as $notification) 
                <a class="dropdown-item d-flex align-items-center" target="_blank"
                    href="{{ url('/download-file') }}/{{ $notification->data["file_name"] }}">
                    <div class="ml-3">
                        <div class="icon-circle bg-primary">
                            @if($notification->type == "App\Notifications\PDFReadyNotification")
                                <i class="fas fa-file-download text-white"></i>
                            @else
                                <i class="fas fa-check text-white"></i>
                            @endif
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">
                            {{ Date('M, d Y', strtotime($notification->created_at)) }}
                        </div>
                        <span class="font-weight-bold">
                            @if($notification->type == 'App\Notifications\PDFReadyNotification')
                                الملف جاهز للتحميل الان اضغط هنا
                            @else
                            @endif
                        </span>
                    </div>
                </a>
            @empty
                <p class="text-center mt-2 mb-2">
                    لا توجد اي اشعارات
                </p>
            @endforelse
        </div>

    </div>
</li>