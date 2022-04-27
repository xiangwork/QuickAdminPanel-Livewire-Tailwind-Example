<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            <button class="btn btn-rose disabled:opacity-50 disabled:cursor-not-allowed" type="button"
                    wire:click="confirm('deleteSelected')"
                    wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                删除
            </button>
        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            <label>
                <input placeholder="搜索" type="text" wire:model.debounce.300ms="search" class="form-select w-full sm:w-1/3 rounded h-8 py-1 rounded"/>
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
                <input type="checkbox" onclick="selectAll()">
            </th>
            <th class="w-28">
                {{ trans('cruds.permission.fields.id') }}
                @include('components.table.sort', ['field' => 'id'])
            </th>
            <th>
                {{ trans('cruds.permission.fields.title') }}
                @include('components.table.sort', ['field' => 'title'])
            </th>
            <th>
            </th>
        </tr>
        </thead>
        <tbody>
        @forelse($permissions as $permission)
            <tr>
                <td>
                    <input type="checkbox" value="{{ $permission->id }}" wire:model="selected" class="rounded">
                </td>
                <td>
                    {{ $permission->id }}
                </td>
                <td>
                    {{ $permission->title }}
                </td>
                <td>
                    <div class="flex justify-end">
                        @can('permission_show')
                            <a class="btn btn-sm btn-info mr-2"
                               href="{{ route('admin.permissions.show', $permission) }}">
                                {{ trans('global.view') }}
                            </a>
                        @endcan
                        @can('permission_edit')
                            <a class="btn btn-sm btn-success mr-2"
                               href="{{ route('admin.permissions.edit', $permission) }}">
                                {{ trans('global.edit') }}
                            </a>
                        @endcan
                        @can('permission_delete')
                            <button class="btn btn-sm btn-rose mr-2" type="button"
                                    wire:click="confirm('delete', {{ $permission->id }})" wire:loading.attr="disabled">
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
            {{ $permissions->links() }}
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

        function selectAll() {

        }
    </script>
@endpush