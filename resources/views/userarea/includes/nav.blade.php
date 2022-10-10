<div class="sidebar" data-color="white" data-active-color="danger">

      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="@if (Route::currentRouteName() == 'userarea.orders.index') active @endif">
            <a href="{{ route('userarea.orders.index') }}">
              <i class="img-icon fa-solid fa-rectangle-list"></i>
              <p>All orders</p>
            </a>
          </li>
          <li class="@if (Route::currentRouteName() == 'userarea.orders.payment_awaiting') active @endif">
            <a href="{{ route('userarea.orders.payment_awaiting') }}">
              <i class="img-icon fa-sharp fa-solid fa-credit-card"></i>
              <p>Payment Awaiting</p>
            </a>
          </li>
          </li>
          <li class="@if (Route::currentRouteName() == 'userarea.orders.in_process') active @endif">
            <a href="{{ route('userarea.orders.in_process') }}">
              <i class="img-icon fa-solid fa-paste"></i>
              <p>In Process</p>
            </a>
          </li>
          </li>
          <li class="@if (Route::currentRouteName() == 'userarea.orders.delivered') active @endif">
            <a href="{{ route('userarea.orders.delivered') }}">
              <i class="img-icon fa-solid fa-box"></i>
              <p>Delivered</p>
            </a>
          </li>
          </li>
          <li class="@if (Route::currentRouteName() == 'userarea.orders.completed') active @endif">
            <a href="{{ route('userarea.orders.completed') }}">
              <i class="img-icon fa-solid fa-clipboard-check"></i>
              <p>Completed</p>
            </a>
          </li>
          <li class="@if (Route::currentRouteName() == 'frontend.order') active @endif">
            <a href="{{ route('frontend.order') }}">
              <i class="img-icon fa-solid fa-file-circle-plus"></i>
              <p>New Order</p>
            </a>
          </li>
          <li class="@if (Route::currentRouteName() == 'userarea.profile') active @endif">
            <a href="{{ route('userarea.profile') }}">
              <i class="img-icon fa-solid fa-user"></i>
              <p>User Profile</p>
            </a>
        </ul>
      </div>
</div>

