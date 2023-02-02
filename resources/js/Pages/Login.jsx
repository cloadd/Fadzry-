import { usePage, Head } from "@inertiajs/inertia-react";
import { Inertia } from "@inertiajs/inertia";
import headerImage from "../../src/images/header.jpg";
import React, { useState } from "react";
import '../../css/style.css'

const Login = () => {
    const {error} = usePage().props.errors;
    const [idAdmin, setIdAdmin] = useState();
    const [nis, setNis] = useState();
    const [nip, setNip] = useState();
    const [password, setPassword ] = useState();

    const [formAdminVisible, setFormAdminVisible] = useState(false);
    const [formSiswaVisible, setFormSiswaVisible] = useState(false);
    const [formGuruVisible, setFormGuruVisible] = useState(false);

    const handleLoginAdmin = () => {
        Inertia.post("/login/admin", {
            idAdmin,
            password,
        });
    };
    const handleLoginSiswa = () => {
        Inertia.post("/login/siswa", {
            nis,
            password,
        });
    };
    const handleLoginGuru = async () => {
        try{
            Inertia.post("/login/guru", {
                nip,
                password,
            })
        } catch {error} {
            console.warn(e.message);
        }
    };

    return (
        <>
            <Head title="Login" />
                <div className="header">
                <img src={headerImage} alt="" />
                </div>
                <div className="menu">
                    <b><a href="#">Home</a></b>
                </div>
                <div className="kiri-atas">
                    <fieldset>
                        <legend></legend>
                        <center>
                            <button className="button-primary" onClick={() => {
                                setFormAdminVisible(!formAdminVisible);
                                setFormSiswaVisible(false);
                                setFormGuruVisible(false)
                            }} >
                                Admin
                            </button>

                            <button className="button-primary" onClick={() => {
                                setFormSiswaVisible(!formSiswaVisible);
                                setFormGuruVisible(false);
                                setFormAdminVisible(false)
                            }} >
                                Siswa
                            </button>

                            <button className="button-primary" onClick={() => {
                                setFormGuruVisible(!formGuruVisible);
                                setFormSiswaVisible(false);
                                setFormAdminVisible(false)
                            }} >
                                Guru
                            </button>
                            <hr />
                            <b>Login Sesuai Dengan Anda</b>
                            <hr />
                        </center>

                        <div style={{ display: formAdminVisible ? "block" : "none"}}>
                            <center>
                                <b>Login Admin</b>
                                <p>{error}</p>
                            </center>

                            <table>
                                <tr>
                                    <td width="25%">Kode Admin</td>
                                    <td width="25%"></td>
                                    <input type="text" onChange={(e) => setIdAdmin(e.target.value)} />
                                </tr>
                                <tr>
                                    <td width="25%">Password</td>
                                    <td width="25%"></td>
                                    <input type="password" onChange={(e) => setPassword(e.target.value)} />
                                </tr>
                                <tr>
                                    <td colSpan="2">
                                        <center>
                                            <button className="button-primary" type="button" onClick={() => handleLoginAdmin()} >
                                            Login
                                            </button>
                                        </center>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div style={{ display: formSiswaVisible ? "block" : "none"}}>
                            <center>
                                <b>Login Siswa</b>
                                <p>{error}</p>
                            </center>

                            <table>
                                <tr>
                                    <td width="25%">NIS</td>
                                    <td width="25%"></td>
                                    <input type="text" onChange={(e) => setNis(e.target.value)} />
                                </tr>
                                <tr>
                                    <td width="25%">Password</td>
                                    <td width="25%"></td>
                                    <input type="password" onChange={(e) => setPassword(e.target.value)} />
                                </tr>
                                <tr>
                                    <td colSpan="2">
                                        <center>
                                            <button className="button-primary" type="button" onClick={() => handleLoginSiswa()} >
                                            Login
                                            </button>
                                        </center>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div style={{ display: formGuruVisible ? "block" : "none"}}>
                            <center>
                                <b>Login Guru</b>
                                <p>{error}</p>
                            </center>

                            <table>
                                <tr>
                                    <td width="25%">NIP</td>
                                    <td width="25%"></td>
                                    <input type="text" onChange={(e) => setNip(e.target.value)} />
                                </tr>
                                <tr>
                                    <td width="25%">Password</td>
                                    <td width="25%"></td>
                                    <input type="password" onChange={(e) => setPassword(e.target.value)} />
                                </tr>
                                <tr>
                                    <td colSpan="2">
                                        <center>
                                            <button className="button-primary" type="button" onClick={() => handleLoginGuru()} >
                                            Login
                                            </button>
                                        </center>
                                    </td>
                                </tr>
                            </table>

                        </div>

                    </fieldset>
                </div>
                <div className="kanan">
                    <center>
                        <h1>
                            Selamat Datang
                            <br />
                            DI WEB Penilaian SMKN 1 CIBINONG
                        </h1>
                    </center>
                </div>

                <div className="kiri-bawah">
                    <center>
                        <p className="mar">Gallery</p>
                        <div className="gallery">
                            <img src="/gambar/g2.jpg" />
                            <div className="deskripsi">SMK Bisa</div>
                        </div>
                    </center>

                </div>
        </>
    );
}
export default Login;