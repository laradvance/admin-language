<!-- Notifications: style can be found in dropdown.less -->
<li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="lang-sm" lang="{{$current}}"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">

                @foreach($languages as $key => $language)
                    <li><!-- start message -->
                        <a class="language" href="#" data-id="{{$key}}">
                            <span class="lang-sm lang-lbl" lang="{{$key}}"></span>
                        </a>
                    </li>
                @endforeach

            </ul>
        </li>
    </ul>
</li>
<script>
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

    $(".language").click(function () {
        let id = $(this).data('id');
        $.post("{{ admin_url('/locale') }}",{_token:LA.token, locale: id}, function () {
            location.reload();
        })
    })
</script>
