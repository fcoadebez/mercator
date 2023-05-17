@extends('layouts.admin')
@section('content')
@can('physical_link_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.links.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.physicalLink.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.physicalLink.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-PhysicalLink">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.physicalLink.fields.src') }}
                        </th>
                        <th width='100'>
                            {{ trans('cruds.physicalLink.fields.src_port') }}
                        </th>
                        <th>
                            {{ trans('cruds.physicalLink.fields.dest') }}
                        </th>
                        <th width='100'>
                            {{ trans('cruds.physicalLink.fields.dest_port') }}
                        </th>
                        <th width='200'>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($physicalLinks as $key => $physicalLink)
                        <tr data-entry-id="{{ $physicalLink->id }}">
                            <td>

                            </td>
                            <td>
                                @if ($physicalLink->peripheral_src_id!=null)
                                <a href="{{ route('admin.peripherals.show', $physicalLink->peripheral_src_id) }}">
                                    {{ $physicalLink->peripheralSrc->name; }}
                                </a>
                                @elseif ($physicalLink->phone_src_id!=null)
                                <a href="{{ route('admin.phones.show', $physicalLink->phone_src_id) }}">
                                    {{ $physicalLink->phoneSrc->name }}
                                </a>
                                @elseif ($physicalLink->physical_router_src_id!=null)
                                <a href="{{ route('admin.physical-routers.show', $physicalLink->physical_router_src_id) }}">
                                    {{ $physicalLink->physicalRouterSrc->name }}
                                </a>
                                @elseif ($physicalLink->physical_security_device_src_id!=null)
                                <a href="{{ route('admin.physical-security-devices.show', $physicalLink->physical_security_device_src_id) }}">
                                    {{ $physicalLink->physicalSecurityDeviceSrc->name }}
                                </a>
                                @elseif ($physicalLink->physical_server_src_id!=null)
                                <a href="{{ route('admin.physical-servers.show', $physicalLink->physical_server_src_id) }}">
                                    {{ $physicalLink->physicalServerSrc->name }}
                                </a>
                                @elseif ($physicalLink->physical_switch_src_id!=null)
                                <a href="{{ route('admin.physical-switches.show', $physicalLink->physical_switch_src_id) }}">
                                    {{ $physicalLink->physicalSwitchSrc->name }}
                                </a>
                                @elseif ($physicalLink->storage_device_src_id!=null)
                                <a href="{{ route('admin.storage-devices.show', $physicalLink->storage_device_src_id) }}">
                                    {{ $physicalLink->storageDeviceSrc->name }}
                                </a>
                                @elseif ($physicalLink->wifi_terminal_src_id!=null)
                                <a href="{{ route('admin.wifi-terminals.show', $physicalLink->wifi_terminal_src_id) }}">
                                    {{ $physicalLink->wifiTerminalSrc->name }}
                                </a>
                                @elseif ($physicalLink->workstation_src_id!=null)
                                <a href="{{ route('admin.workstations.show', $physicalLink->workstation_src_id) }}">
                                    {{ $physicalLink->workstationSrc->name }}
                                </a>
                                @elseif ($physicalLink->router_src_id!=null)
                                <a href="{{ route('admin.routers.show', $physicalLink->router_src_id) }}">
                                    {{ $physicalLink->routerSrc->name }}
                                </a>
                                @elseif ($physicalLink->network_switch_src_id!=null)
                                <a href="{{ route('admin.network-switches.show', $physicalLink->network_switch_src_id) }}">
                                    {{ $physicalLink->networkSwitchSrc->name }}
                                </a>
                                @elseif ($physicalLink->logical_server_src_id!=null)
                                <a href="{{ route('admin.logical-servers.show', $physicalLink->logical_server_src_id) }}">
                                    {{ $physicalLink->logicalServerSrc->name }}
                                </a>
                                @endif
                                </a>
                            </td>
                            <td>
                                {{ $physicalLink->src_port }}
                            </td>
                            <td>
                                @if ($physicalLink->peripheral_dest_id!=null)
                                <a href="{{ route('admin.peripherals.show', $physicalLink->peripheral_dest_id) }}">
                                    {{ $physicalLink->peripheralDest->name; }}
                                </a>
                                @elseif ($physicalLink->phone_dest_id!=null)
                                <a href="{{ route('admin.phones.show', $physicalLink->phone_dest_id) }}">
                                    {{ $physicalLink->phoneDest->name }}
                                </a>
                                @elseif ($physicalLink->physical_router_dest_id!=null)
                                <a href="{{ route('admin.physical-routers.show', $physicalLink->physical_router_dest_id) }}">
                                    {{ $physicalLink->physicalRouterDest->name }}
                                </a>
                                @elseif ($physicalLink->physical_security_device_dest_id!=null)
                                <a href="{{ route('admin.physical-security-devices.show', $physicalLink->physical_security_device_dest_id) }}">
                                    {{ $physicalLink->physicalSecurityDeviceDest->name }}
                                </a>
                                @elseif ($physicalLink->physical_server_dest_id!=null)
                                <a href="{{ route('admin.physical-servers.show', $physicalLink->physical_server_dest_id) }}">
                                    {{ $physicalLink->physicalServerDest->name }}
                                </a>
                                @elseif ($physicalLink->physical_switch_dest_id!=null)
                                <a href="{{ route('admin.physical-switches.show', $physicalLink->physical_switch_dest_id) }}">
                                    {{ $physicalLink->physicalSwitchDest->name }}
                                </a>
                                @elseif ($physicalLink->storage_device_dest_id!=null)
                                <a href="{{ route('admin.storage-devices.show', $physicalLink->storage_device_dest_id) }}">
                                    {{ $physicalLink->storageDeviceDest->name }}
                                </a>
                                @elseif ($physicalLink->wifi_terminal_dest_id!=null)
                                <a href="{{ route('admin.wifi-terminals.show', $physicalLink->wifi_terminal_dest_id) }}">
                                    {{ $physicalLink->wifiTerminalDest->name }}
                                </a>
                                @elseif ($physicalLink->workstation_dest_id!=null)
                                <a href="{{ route('admin.workstations.show', $physicalLink->workstation_dest_id) }}">
                                    {{ $physicalLink->workstationDest->name }}
                                </a>
                                @elseif ($physicalLink->router_dest_id!=null)
                                <a href="{{ route('admin.routers.show', $physicalLink->router_dest_id) }}">
                                    {{ $physicalLink->routerDest->name }}
                                </a>
                                @elseif ($physicalLink->network_switch_dest_id!=null)
                                <a href="{{ route('admin.network-switches.show', $physicalLink->network_switch_dest_id) }}">
                                    {{ $physicalLink->networkSwitchDest->name }}
                                </a>
                                @elseif ($physicalLink->logical_server_dest_id!=null)
                                <a href="{{ route('admin.logical-servers.show', $physicalLink->logical_server_dest_id) }}">
                                    {{ $physicalLink->logicalServerDest->name }}
                                </a>
                                @endif
                                </a>
                            </td>
                            <td>
                                {{ $physicalLink->dest_port }}
                            </td>
                            <td>
                                @can('physical_link_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.links.show', $physicalLink->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('physical_link_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.links.edit', $physicalLink->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('physical_link_delete')
                                    <form action="{{ route('admin.links.destroy', $physicalLink->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
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
@can('physical_link_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.links.massDestroy') }}",
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
    order: [[ 1, 'asc' ]],
    pageLength: 100, stateSave: true,
  });
  let table = $('.datatable-PhysicalLink:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection