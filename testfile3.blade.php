<x-common.base>
    @section('header')
        <x-common.header screenname="条例選択" />
        <x-common.header-menu>
            <x-slot name="button">
                <div class="align-center">
                    {{-- <x-common.button type="normal" class="margin-5px margin-right-20px min-width-112px" id="set_val" >反映</x-common.button> --}}
                    {{-- <x-common.button type="normal" class="margin-5px min-width-112px" onclick="window.opener.closeChild()" >キャンセル</x-common.button> --}}
                </div>
            </x-slot>
        </x-common.header-menu>
    @endsection

    @section('content')
        @include('select-ordinances.index')
    @endsection

    @section('script')
        <script src="/js/jquery.treeview.js"></script>
        <script src="/static-master/custom-select-ordinances.js"></script>
    @endsection

    @section('css')
        <link href="/css/jquery.treeview.css" rel="stylesheet">
        <link href="/static-master/custom-select-ordinances.css" rel="stylesheet">
    @endsection
</x-common.base>
