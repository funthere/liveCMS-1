<!-- Optionally, you can add icons to the links -->
<li class="@if(request()->is('admin'))active @endif"><a href="{{ asset('admin') }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
<li class="@if(request()->is('admin/kategori*'))active @endif"><a href="{{ asset('admin/kategori') }}"><i class="fa fa-list"></i> <span>Kategori</span></a></li>
<li class="@if(request()->is('admin/tag*'))active @endif"><a href="{{ asset('admin/tag') }}"><i class="fa fa-tag"></i> <span>Tag</span></a></li>
<li class="@if(request()->is('admin/artikel*'))active @endif"><a href="{{ asset('admin/artikel') }}"><i class="fa fa-file-o"></i> <span>Artikel</span></a></li>
<li class="@if(request()->is('setting*'))active @endif"><a href="{{ asset('setting') }}"><i class="fa fa-cog"></i> <span>Setting</span></a></li>
<li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>