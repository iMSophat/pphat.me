import React, {useEffect, useState} from 'react';
import ReactDOM from 'react-dom';
import ListLoader from './ListLoader'
import DataTable from 'react-data-table-component';


function Home() {
    const [state, setData] = useState({
        users: ''
    });
    
    const fetchData = async () => {
        const api = await fetch("api/users");
        setData({
            users: await api.json()
        });
    };

    useEffect(() => {
        fetchData();
    }, [])

    
    const columns = [
        { name: 'No', selector: row => row.id, sortable: true,},
        {name: 'Name',selector: row => row.name,sortable: true,},
        {name: 'Email',selector: row => row.email,sortable: true,},
        {name: 'Status',selector: row => row.status,sortable: true,},
    ];

    const data = []

    state?.users?.data?.forEach(element => {
        const item = [{
            id: element?.id,
            name: element?.name,
            email: element?.email,
            status: element?.status? 'enabled': 'disabled'
        }];
        data.push(item[0])
    });

    return (
        <div className="overflow-x-auto bg-white rounded-md p-5">
            {/* {
                data?
                <DataTable
                    direction="auto"
                    columns={columns}
                    pagination
                    responsive
                    subHeaderAlign="right"
                    subHeaderWrap
                    data={data}
                />:
                <ListLoader col={4}/>
            } */}
            

            <table className='w-full border'>
                <thead>
                    <tr>
                        <th className='group border w-20 first:border-l-0 last:border-r-0 border-slate-300 dark:border-slate-600 font-semibold px-4 py-3 text-slate-900 dark:text-slate-200 text-center'>No</th>
                        <th className='text-left group border first:border-l-0 last:border-r-0 border-slate-300 dark:border-slate-600 font-semibold px-4 py-3 text-slate-900 dark:text-slate-200'>Name</th>
                        <th className='text-left group border first:border-l-0 last:border-r-0 border-slate-300 dark:border-slate-600 font-semibold px-4 py-3 text-slate-900 dark:text-slate-200'>Email</th>
                        <th className='text-left group border first:border-l-0 last:border-r-0 border-slate-300 dark:border-slate-600 font-semibold px-4 py-3 text-slate-900 dark:text-slate-200'>Status</th>
                    </tr>
                </thead>
                <tbody>
                    { 
                        state?.users?.data ? 
                        state?.users?.data?.map(
                            (user) => (
                                <tr key={user?.id}>
                                    <td className='text-center border first:border-l-0 last:border-r-0 border-slate-300 dark:border-slate-700 px-4 py-3 text-slate-500 dark:text-slate-400'>{user?.id}</td>
                                    <td className='border first:border-l-0 last:border-r-0 border-slate-300 dark:border-slate-700 px-4 py-3 text-slate-500 dark:text-slate-400'>{user?.name}</td>
                                    <td className='border first:border-l-0 last:border-r-0 border-slate-300 dark:border-slate-700 px-4 py-3 text-slate-500 dark:text-slate-400'>{user?.email}</td>
                                    <td className='border first:border-l-0 last:border-r-0 border-slate-300 dark:border-slate-700 px-4 py-3 text-slate-500 dark:text-slate-400'>{user?.status? 'enabled': 'disabled'}</td>
                                </tr>
                            )
                        ) : <ListLoader col={4}/>
                    }
                </tbody>
            </table>
            <div>
                
            </div>
        </div>
    );
}

export default Home;

if (document.getElementById('home')) {
    ReactDOM.render(<Home />, document.getElementById('home'));
}
