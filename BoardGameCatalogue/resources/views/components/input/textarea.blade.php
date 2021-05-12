<div>
    <textarea
         {{ $attributes->except('class') }}
         {{ $attributes->merge(['class' => 'bla your-standard-input-classes']) }}
    ></textarea>
 </div>
