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
                    {{ trans('cruds.contactContact.fields.id') }}
                    @include('components.table.sort', ['field' => 'id'])
                </th>
                <th>
                    {{ trans('cruds.contactContact.fields.company') }}
                    @include('components.table.sort', ['field' => 'company.company_name'])
                </th>
                <th>
                    {{ trans('cruds.contactContact.fields.contact_first_name') }}
                    @include('components.table.sort', ['field' => 'contact_first_name'])
                </th>
                <th>
                    {{ trans('cruds.contactContact.fields.contact_last_name') }}
                    @include('components.table.sort', ['field' => 'contact_last_name'])
                </th>
                <th>
                    {{ trans('cruds.contactContact.fields.contact_phone_1') }}
                    @include('components.table.sort', ['field' => 'contact_phone_1'])
                </th>
                <th>
                    {{ trans('cruds.contactContact.fields.contact_phone_2') }}
                    @include('components.table.sort', ['field' => 'contact_phone_2'])
                </th>
                <th>
                    {{ trans('cruds.contactContact.fields.contact_email') }}
                    @include('components.table.sort', ['field' => 'contact_email'])
                </th>
                <th>
                    {{ trans('cruds.contactContact.fields.contact_skype') }}
                    @include('components.table.sort', ['field' => 'contact_skype'])
                </th>
                <th>
                    {{ trans('cruds.contactContact.fields.contact_address') }}
                    @include('components.table.sort', ['field' => 'contact_address'])
                </th>
                <th>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($contactContacts as $contactContact)
                <tr>
                    <td>
                        <label>
                            <input type="checkbox" value="{{ $contactContact->id }}" wire:model="selected" class="rounded">
                        </label>
                    </td>
                    <td>
                        {{ $contactContact->id }}
                    </td>
                    <td>
                        @if($contactContact->company)
                            <span class="badge badge-relationship">{{ $contactContact->company->company_name ?? '' }}</span>
                        @endif
                    </td>
                    <td>
                        {{ $contactContact->contact_first_name }}
                    </td>
                    <td>
                        {{ $contactContact->contact_last_name }}
                    </td>
                    <td>
                        {{ $contactContact->contact_phone_1 }}
                    </td>
                    <td>
                        {{ $contactContact->contact_phone_2 }}
                    </td>
                    <td>
                        {{ $contactContact->contact_email }}
                    </td>
                    <td>
                        {{ $contactContact->contact_skype }}
                    </td>
                    <td>
                        {{ $contactContact->contact_address }}
                    </td>
                    <td>
                        <div class="flex justify-end">
                            @can('contact_contact_show')
                                <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.contact-contacts.show', $contactContact) }}">
                                    {{ trans('global.view') }}
                                </a>
                            @endcan
                            @can('contact_contact_edit')
                                <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.contact-contacts.edit', $contactContact) }}">
                                    {{ trans('global.edit') }}
                                </a>
                            @endcan
                            @can('contact_contact_delete')
                                <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $contactContact->id }})" wire:loading.attr="disabled">
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
            {{ $contactContacts->links() }}
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