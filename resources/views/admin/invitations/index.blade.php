@extends('layouts.admin')
@section('content')
@can('invitation_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.invitations.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.invitation.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.invitation.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Invitation">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.invitation.fields.event') }}
                        </th>
                        <th>
                            {{ trans('cruds.invitation.fields.all_users_invite') }}
                        </th>
                        <th>
                            {{ trans('cruds.invitation.fields.sent_at') }}
                        </th>
                        <th>
                            {{ trans('cruds.invitation.fields.accepted_at') }}
                        </th>
                        <th>
                            {{ trans('cruds.invitation.fields.rejected_at') }}
                        </th>
                        <th>
                            {{ trans('cruds.invitation.fields.invitation_valid_date') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($invitations as $key => $invitation)
                        <tr data-entry-id="{{ $invitation->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $invitation->event->name_va ?? '' }}
                            </td>
                            <td>
                                @foreach($invitation->all_users_invites as $key => $item)
                                    <span class="badge badge-info">{{ $item->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                {{ $invitation->sent_at ?? '' }}
                            </td>
                            <td>
                                {{ $invitation->accepted_at ?? '' }}
                            </td>
                            <td>
                                {{ $invitation->rejected_at ?? '' }}
                            </td>
                            <td>
                                {{ $invitation->invitation_valid_date ?? '' }}
                            </td>
                            <td>
                                @can('invitation_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.invitations.show', $invitation->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('invitation_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.invitations.edit', $invitation->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.invitations.send', $invitation->id) }}">
                                        {{ trans('global.invite_send') }}
                                    </a>
                                @endcan

                                @can('invitation_delete')
                                    <form action="{{ route('admin.invitations.destroy', $invitation->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                                

                                @can('invitation_resend')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.invitations.edit', $invitation->id) }}">
                                        {{ trans('global.resend') }}
                                    </a>
                                @endcan
                                

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('invitation_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.invitations.massDestroy') }}",
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
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Invitation:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection