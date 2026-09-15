@php($activeStep = $activeStep ?? 1)
@php($steps = [
    ['label' => 'Rooms', 'route' => 'stay'],
    ['label' => 'Guest Details', 'route' => 'guest-details'],
    ['label' => 'Add-ons', 'route' => 'addons'],
    ['label' => 'Review', 'route' => 'booking-summary'],
    ['label' => 'Confirmed', 'route' => 'booking-confirmation'],
])

<section class="booking-timeline sticky top-20 z-40 w-full border-b border-surface-container-highest bg-surface-container-low/95 py-space-md shadow-sm backdrop-blur-md" aria-label="Booking progress">
    <div class="max-w-container-max mx-auto px-gutter-mobile md:px-gutter-desktop">
        <div class="relative mx-auto flex max-w-4xl items-start justify-between">
            <div class="absolute left-[10%] right-[10%] top-4 h-0.5 bg-surface-container-highest"></div>
            <div class="absolute left-[10%] top-4 h-0.5 bg-primary-container transition-all duration-300" style="width: {{ (($activeStep - 1) / 4) * 80 }}%"></div>
            @foreach($steps as $index => $step)
                @php($number = $index + 1)
                @php($isActive = $number === $activeStep)
                @php($isComplete = $number < $activeStep)
                <div class="booking-step relative z-10 flex min-w-0 flex-1 flex-col items-center gap-1 text-center transition-colors {{ $isActive || $isComplete ? 'text-primary' : 'text-on-surface-variant/60' }}" data-step="{{ $number }}" aria-current="{{ $isActive ? 'step' : 'false' }}">
                    <span class="flex h-8 w-8 items-center justify-center rounded-full font-label-sm text-label-sm font-bold shadow-sm transition-colors {{ $isActive ? 'bg-primary-container text-on-primary' : ($isComplete ? 'bg-primary-fixed text-on-primary-fixed' : 'bg-surface-container-lowest text-on-surface-variant') }}">
                        {{ $isComplete ? '✓' : $number }}
                    </span>
                    <span class="font-label-sm text-label-sm uppercase tracking-wider {{ $isActive ? 'font-bold' : '' }}">{{ $step['label'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>
