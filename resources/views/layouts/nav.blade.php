 <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(Request::path()=="transactions") active @endif" href="{{route('transactions.index')}}">
                  <i class="material-icons">account_balance_wallet</i>
                  Transacciones 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(Request::path()=="userloan") active @endif" href="{{route('userloan.index')}}">
                  <i class="material-icons">account_balance_wallet</i>
                  Prestamos de Usuario
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(Request::path()=="loancondition") active @endif" href="{{route('loancondition.index')}}">
                  <i class="material-icons">account_balance_wallet</i>
                  Condiciones de Prestamo
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(Request::path()=="localloan") active @endif" href="{{route('localloan.index')}}">
                  <i class="material-icons">account_balance_wallet</i>
                  Prestamos Locales
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(Request::path()=="localmessage") active @endif" href="{{route('localmessage.index')}}">
                  <i class="material-icons">account_balance_wallet</i>
                  Mensajes Locales
                </a>
              </li>
            </ul>

            <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6> -->
       <!--     <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul>-->
          </div>
        </nav>