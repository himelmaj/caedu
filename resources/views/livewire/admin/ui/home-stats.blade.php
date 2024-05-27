<div class="grid gap-4 lg:gap-8 md:grid-cols-3">

    @foreach ($this->data as $item)
        <x-stat-card name="{{ $item['name'] }}" value="{{ $item['value'] }}" increase="{{ $item['increase'] }}"
            decrease="{{ $item['decrease'] }}" icon="{{ $item['icon'] }}" />
    @endforeach
</div>