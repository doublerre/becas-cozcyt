<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'ap_paterno' => ['required', 'string', 'max:255'],
            'ap_materno' => ['required', 'string', 'max:255'],
            'estado' => ['required', 'string', 'max:255'],
            'municipio' => ['required', 'string', 'max:255'],
            'institucion' => ['required', 'string', 'max:255'],
            'carrera' => ['required', 'string', 'max:255'],
            'rfc' => ['required', 'string', 'max:13'],
            'curp' => ['required', 'string', 'max:255'],
            'fecha_nacimineto' => ['required', 'string', 'max:255'],
            'genero' => ['required', 'string', 'max:255'],
            'edad' => ['required', 'string', 'max:255'],
            'g_etnico' => ['required', 'string', 'max:255'],
            'colonia' => ['required', 'string', 'max:255'],
            'calle' => ['required', 'string', 'max:255'],
            'numero' => ['required', 'string', 'max:255'],
            'codigo_postal' => ['required', 'string', 'max:255'],
            'tel_cel' => ['required', 'string', 'max:255'],
            'tel_fijo' => ['required', 'string', 'max:255'],
            'grado' => ['required', 'string', 'max:255'],
            'promedio' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
        ])->validateWithBag('updateProfileInformation');

        // 'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        // if (isset($input['photo'])) {
        //     $user->updateProfilePhoto($input['photo']);
        // }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
                'rfc' => $input['rfc'],
                'estado' => $input['estado'],
                'municipio' => $input['municipio'],
                'institucion' => $input['institucion'],
                'carrera' => $input['carrera'],
                'ap_paterno' => $input['ap_paterno'],
                'ap_materno' => $input['ap_materno'],
                'curp' => $input['curp'],
                'fecha_nacimiento' => $input['fecha_nacimiento'],
                'genero' => $input['genero'],
                'edad' => $input['edad'],
                'g_etnico' => $input['g_etnico'],
                'colonia' => $input['colonia'],
                'calle' => $input['calle'],
                'numero' => $input['numero'],
                'codigo_postal' => $input['codigo_postal'],
                'tel_cel' => $input['tel_cel'],
                'tel_fijo' => $input['tel_fijo'],
                'grado' => $input['grado'],
                'promedio' => $input['promedio'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'rfc' => $input['rfc'],
            'estado' => $input['estado'],
            'municipio' => $input['municipio'],
            'institucion' => $input['institucion'],
            'carrera' => $input['carrera'],
            'email_verified_at' => null,
            'ap_paterno' => $input['ap_paterno'],
            'ap_materno' => $input['ap_materno'],
            'curp' => $input['curp'],
            'fecha_nacimiento' => $input['fecha_nacimiento'],
            'genero' => $input['genero'],
            'edad' => $input['edad'],
            'g_etnico' => $input['g_etnico'],
            'colonia' => $input['colonia'],
            'calle' => $input['calle'],
            'numero' => $input['numero'],
            'codigo_postal' => $input['codigo_postal'],
            'tel_cel' => $input['tel_cel'],
            'tel_fijo' => $input['tel_fijo'],
            'grado' => $input['grado'],
            'promedio' => $input['promedio'],
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
