@props([
'classes' => 'absolute right-10 mt-1 w-48 divide-y divide-gray-200 rounded-md border border-gray-200 bg-white shadow-md
z-50'
])

@php
$classAttribute = $attributes->get('class') ? $attributes->get('class') : $classes;
@endphp

<!-- button profile -->
<div>
    <x-button-profile.button-profile-button />

    <x-button-profile.button-profile-dropdown {{ $attributes->merge(['class' => $classAttribute]) }}/>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
            const layout = {
                profileOpen: false,
                toggleProfile() {
                    this.profileOpen = !this.profileOpen;
                    document.getElementById('profile-dropdown').style.display = this.profileOpen ? 'block' : 'none';
                },
                closeProfile() {
                    this.profileOpen = false;
                    document.getElementById('profile-dropdown').style.display = 'none';
                }
            };

            document.getElementById('profile-toggle').addEventListener('click', (e) => {
                layout.toggleProfile();
                e.stopPropagation();
            });

            document.addEventListener('click', (event) => {
                if (!document.getElementById('profile-dropdown').contains(event.target)) {
                    layout.closeProfile();
                }
            });
        });
</script>