<div style="position: relative; width: 100%; max-width: 800px; margin: 0 auto; z-index: 1;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0; pointer-events: none; overflow: hidden;">
        <svg viewBox="0 0 268.614 148" xmlns="http://www.w3.org/2000/svg"
             preserveAspectRatio="none"
             style="width: 100%; height: 100%; display: block;">
            <path d="M3.232 0.385c-1.572,0 -2.858,1.286 -2.858,2.857l0.009 142.01c0,1.305 1.069,2.373 2.372,2.373l81.788 0 13.653 -11.197 167.671 0c1.305,0 2.373,-1.068 2.373,-2.373l0 -111.034c0,-1.572 -1.286,-2.858 -2.858,-2.858l-14.003 0c-1.572,0 -2.858,-1.286 -2.858,-2.858l0 -14.03c0,-1.572 -1.285,-2.901 -2.857,-2.901l-242.432 0.011z"
                  fill="#fff" stroke="#161A30" stroke-width="0.5"/>
        </svg>
    </div>

    <div style="position: relative; z-index: 1; padding: 2.5rem; padding-bottom: 6rem; color: #fff;">

        <h2 style="font-size: 1.75rem; font-weight: 600; margin-bottom: 1rem;">
            {{ $title ?? '' }}
        </h2>
        <div style="font-size: 1rem;">
            {{ $slot }}
        </div>
    </div>
</div>
