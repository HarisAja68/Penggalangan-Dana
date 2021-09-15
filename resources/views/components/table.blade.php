<table {{ $attributes->merge(['class' => "table table-striped table-bordered"]) }}>
    @isset($thead)
    <thead>
        {{ $thead }}
    </thead>
    @endisset

    <tbody>
        {{ $slot }}
    </tbody>

    @isset($tfoot)
    <tfoot>
        {{ $tfoot }}
    </tfoot>
    @endisset
</table>
