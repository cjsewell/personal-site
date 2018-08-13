 <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

              <% loop $Menu(1) %>
                <li>
                    <a class="$LinkingMode nav-link <% if Children %>dropdown-toggle<% end_if %>" <% if Children %>aria-haspopup="true" aria-expanded="false"<% end_if %>  href="$Link" title="Go to the $Title page">$MenuTitle</a>
                    <% if Children %>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <% loop $Children %>
                        <a class="dropdown-item" href="$Link" title="Go to the $Title page">$MenuTitle</a></br>
                        <% end_loop %>
                    </div>
                    <% end_if %>
                </li>
                <% end_loop %>
          </div>
        </div>
      </nav>


