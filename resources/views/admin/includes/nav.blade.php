<ul id="sidebarnav">
    <li class="nav-small-cap">Main Menu</li>
    @if(auth()->check() && auth()->user()->role_id==1)
    <li> <a class="waves-effect waves-dark" href="{{ route('admin.dashboard') }}"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
    </li>
    <li> 
        <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple-outline"></i><span class="hide-menu">Users Management</span>
        </a>
        <ul aria-expanded="false" class="collapse">
            <li><a href="{{ route('admin.user.index') }}">Users </a></li>
            <li><a href="{{ route('admin.pseudonym.index') }}">Pseudonyms</a></li>
        </ul>
    </li>
    <li>
        <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-folder-multiple-outline"></i><span class="hide-menu">Categories Management</span>
        </a>
        <ul aria-expanded="false" class="collapse">
            <li><a href="{{ route('admin.category.index') }}">Category </a></li>
            <li><a href="{{ route('admin.sub_category.index') }}">Sub Categories</a></li>
        </ul>
    </li>
    <li> 
        <a class="waves-effect waves-dark" href="{{ route('admin.post.index') }}" aria-expanded="false"> <i class="mdi mdi-pencil-box"></i>
            <span class="hide-menu">Post</span>
        </a>
    </li>
    <li> 
        <a class="waves-effect waves-dark" href="{{ route('admin.page.index') }}" aria-expanded="false"> <i class="mdi mdi-book-open-page-variant"></i>
            <span class="hide-menu">Pages</span>
        </a>
    </li>
    <li> 
        <a class="waves-effect waves-dark" href="{{ route('admin.setting.index') }}" aria-expanded="false"> <i class="mdi mdi-settings"></i>
            <span class="hide-menu">Settings</span>
        </a>
    </li>
    @endif
    @if(auth()->check() && auth()->user()->role_id==2)
    <li> 
        <a class="waves-effect waves-dark" href="{{ route('admin.post.index') }}" aria-expanded="false"> <i class="mdi mdi-pencil-box"></i>
            <span class="hide-menu">Post</span>
        </a>
    </li>
    @endif
</ul>
