<div class="flex gap-2 w-full h-fit items-center justify-between">
    <label for={{ $inputId }} class="w-fit h-full leading-tight">
        {{ $labelText }} :
    </label>
    @if ($inputType == 'text')
        <x-form-field :inputId="$inputId" />
    @elseif($inputType == 'file')
        <x-form-upload :inputId="$inputId" />
    @endif
</div>
