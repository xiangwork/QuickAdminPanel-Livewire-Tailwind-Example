<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            <button class="btn btn-rose disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                删除
            </button>
        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            <label>
                <input placeholder="搜索" type="text" wire:model.debounce.300ms="search" class="form-select w-full sm:w-1/3 rounded h-8 py-1" />
            </label>
        </div>
    </div>
    <div wire:loading.delay class="col-12 alert alert-info">
        加载中...
    </div>
    <table class="table table-index w-full">
        <thead>
            <tr>
                <th class="w-9">
                </th>
                <th class="w-28">
                    {{ trans('cruds.role.fields.id') }}
                    @include('components.table.sort', ['field' => 'id'])
                </th>
                <th>
                    {{ trans('cruds.role.fields.title') }}
                    @include('components.table.sort', ['field' => 'title'])
                </th>
                <th>
                    {{ trans('cruds.role.fields.permissions') }}
                </th>
                <th>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($roles as $role)
                <tr>
                    <td>
                        <label>
                            <input type="checkbox" value="{{ $role->id }}" wire:model="selected" class="rounded">
                        </label>
                    </td>
                    <td>
                        {{ $role->id }}
                    </td>
                    <td>
                        {{ $role->title }}
                    </td>
                    <td>
                        @foreach($role->permissions as $key => $entry)
                            <span class="badge badge-relationship">{{ $entry->title }}</span>
                        @endforeach
                    </td>
                    <td>
                        <div class="flex justify-end">
                            @can('role_show')
                                <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.roles.show', $role) }}">
                                    {{ trans('global.view') }}
                                </a>
                            @endcan
                            @can('role_edit')
                                <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.roles.edit', $role) }}">
                                    {{ trans('global.edit') }}
                                </a>
                            @endcan
                            @can('role_delete')
                                <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $role->id }})" wire:loading.attr="disabled">
                                    {{ trans('global.delete') }}
                                </button>
                            @endcan
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="10">暂无数据</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="card-body">
        <div class="pt-3">
            @if($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    条记录已选择
                </p>
            @endif
            {{ $roles->links() }}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
    if (!confirm("{{ trans('global.areYouSure') }}")) {
        return
    }
@this[e.callback](...e.argv)
})
    </script>
@endpush