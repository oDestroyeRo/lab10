<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Exchange</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('/bitcoins') }}">Bitcoins</a></li>
        <li><a href="{{ url('/ethereums') }}">Ethereum</a></li>
        <li><a href="{{ url('/moneros') }}">Monero</a></li>
        <li><a href="{{ url('/dollars') }}">US Dollar</a></li>
        <li><a href="{{ url('/api/bitcoins') }}">API Bitcoin</a></li>
        <li><a href="{{ url('/api/ethereums') }}">API Ethereum</a></li>
        <li><a href="{{ url('/api/moneros') }}">API Monero</a></li>
        <li><a href="{{ url('/api/dollars') }}">API US Dollars</a></li>

        <!-- <li><a href="{{ url('/singers/create') }}">Add Singer</a></li>
        <li><a href="{{ url('/api/singers') }}">API Singer</a></li>
        <li><a href="{{ url('/albums/create') }}">Add Album</a></li> -->
     </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
