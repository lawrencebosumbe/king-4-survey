@extends('layouts.admin')
@section('content')

    <div class="card-body my-survey">
        <h3 class="card-title">My Survey</h3>
        <ul>
            <li>
                <span class="navbar-brand-full">
                    <a href="{{ route('admin.questionnaires.create') }}"><img src="{{ asset('images/self-assessment.jpg') }}" class="shadow p-3 mb-5 bg-white rounded"/> </a>
                </span>
            </li>
            <li>
                <span class="navbar-brand-full">
                    <a href=""><img src="{{ asset('images/member.jpg') }}" class="shadow p-3 mb-5 bg-white rounded"/> </a>
                </span>
            </li>
            <li>
                <span class="navbar-brand-full">
                    <a href=""><img src="{{ asset('images/iss.jpg') }}" class="shadow p-3 mb-5 bg-white rounded" /> </a>
                </span>
            </li>
        </ul>
    </div>

@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('users_manage')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.users.mass_destroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
