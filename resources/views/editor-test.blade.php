@extends('layouts.simple')

@section('body')
    <div class="container">

        <div>
            <input id="markdown-toggle" type="checkbox">
        </div>

        <div id="editor" class="bs-editor page-content" style="margin-bottom: 23px"></div>

        <div id="content" style="display: none;">
            <h2>This is an editable block</h2>
            <p>
                Lorem ipsum dolor sit amet, <strong>consectetur adipisicing</strong> elit. Asperiores? <br>
                Some <span style="text-decoration: underline">Underlined content</span> Lorem ipsum dolor sit amet. <br>
                Some <span style="text-decoration: line-through;">striked content</span> Lorem ipsum dolor sit amet. <br>
                Some <span style="color: red;">Red Content</span> Lorem ipsum dolor sit amet. <br>
                Some <a href="https://cats.com" target="_blank" title="link A">Linked Content</a> Lorem ipsum dolor sit amet. <br>
            </p>

            <table style="width: 100%;">
                <thead>
                <tr>
                    <th>Header A</th>
                    <th>Header B</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Content 1</td>
                    <td>Content 2</td>
                </tr>
                </tbody>
            </table>

            <p><img src="/user_avatar.png" alt="Logo"></p>
            <ul>
                <li>Item A</li>
                <li>Item B</li>
                <li>Item C</li>
            </ul>

            <p>Lorem ipsum dolor sit amet.</p>

            <hr>

            <p class="align-right">Lorem ipsum dolor sit amet.</p>

            <p class="callout info">
                This is an info callout test!
            </p>
        </div>

    </div>
@endsection


@section('scripts')
    <script src="{{ versioned_asset('dist/editor.js') }}" nonce="{{ $cspNonce }}"></script>
@stop